# Branching Workflow

All work happens on a feature branch cut from an updated `main`. Direct pushes to `main` are blocked by branch protection — every change reaches `main` through a reviewed Pull Request.

## Branch Naming

| Kind of work | Pattern | Example |
|---------------|---------|---------|
| New feature | `feature/<short-description>` | `feature/task-priority-filter` |
| Bug fix | `fix/<short-description>` | `fix/incorrect-done-count` |
| Chore / maintenance | `chore/<short-description>` | `chore/branch-protection` |

## Rules

1. Always branch from an updated `main`: `git switch main && git pull origin main && git switch -c <branch>`.
2. One task, one branch — never mix unrelated changes.
3. Never commit directly to `main`.
4. Every PR gets a self-review against `CHECKLIST.md` before requesting review.